(function() {
    'use strict';

    var app = angular.module('jobTrackerApp', []);

    // Configure CSRF token for $http
    app.run(['$http', function($http) {
        var token = document.querySelector('meta[name="csrf-token"]');
        if (token) {
            $http.defaults.headers.common['X-CSRF-TOKEN'] = token.getAttribute('content');
        }
    }]);

    // Sidebar & Navigation Controller (Changelog Modal)
    app.controller('SidebarController', ['$scope', function($scope) {
        $scope.showChangelogModal = false;

        $scope.openChangelog = function() {
            $scope.showChangelogModal = true;
        };

        $scope.closeChangelog = function() {
            $scope.showChangelogModal = false;
        };

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && $scope.showChangelogModal) {
                $scope.$apply(function() {
                    $scope.showChangelogModal = false;
                });
            }
        });
    }]);

    // User Profile Controller
    app.controller('ProfileController', ['$scope', '$http', function($scope, $http) {
        $scope.user = { name: '', email: '' };
        $scope.loading = false;
        $scope.message = null;
        $scope.errors = {};

        $scope.init = function(name, email) {
            $scope.user.name = name;
            $scope.user.email = email;
        };

        $scope.updateProfile = function() {
            $scope.loading = true;
            $scope.message = null;
            $scope.errors = {};

            $http.post('/api/profile', $scope.user)
                .then(function(response) {
                    $scope.loading = false;
                    $scope.message = { type: 'success', text: response.data.message || 'Berhasil memperbarui biodata!' };
                    if (window.toastr) toastr.success('Berhasil memperbarui biodata!');
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    } else {
                        $scope.message = { type: 'danger', text: error.data.message || 'Gagal memperbarui biodata.' };
                    }
                });
        };
    }]);

    // Change Password Controller
    app.controller('ChangePasswordController', ['$scope', '$http', function($scope, $http) {
        $scope.form = { old_password: '', new_password: '' };
        $scope.loading = false;
        $scope.message = null;
        $scope.errors = {};

        $scope.updatePassword = function() {
            $scope.loading = true;
            $scope.message = null;
            $scope.errors = {};

            $http.post('/api/profile/password', $scope.form)
                .then(function(response) {
                    $scope.loading = false;
                    if (response.data.redirect) {
                        if (window.toastr) toastr.success(response.data.message);
                        window.location.href = response.data.redirect;
                    } else {
                        $scope.message = { type: 'success', text: response.data.message };
                        $scope.form = { old_password: '', new_password: '' };
                    }
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    } else {
                        $scope.message = { type: 'danger', text: error.data.message || 'Password anda salah!' };
                    }
                });
        };
    }]);

    // Admin Account Management Controller
    app.controller('AccountController', ['$scope', '$http', function($scope, $http) {
        $scope.users = [];
        $scope.loading = false;
        $scope.account = { name: '', email: '', is_admin: '' };
        $scope.errors = {};
        $scope.message = null;

        $scope.loadAccounts = function() {
            $scope.loading = true;
            $http.get('/api/accounts')
                .then(function(response) {
                    $scope.users = response.data.data || response.data;
                    $scope.loading = false;
                });
        };

        $scope.createAccount = function() {
            $scope.loading = true;
            $scope.errors = {};
            $http.post('/api/accounts', $scope.account)
                .then(function(response) {
                    $scope.loading = false;
                    if (window.toastr) toastr.success('Berhasil mendaftarkan akun!');
                    window.location.href = '/admin/account';
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    }
                });
        };

        $scope.initEdit = function(id, name, email, isAdmin) {
            $scope.account = { id: id, name: name, email: email, is_admin: String(isAdmin) };
        };

        $scope.updateAccount = function() {
            $scope.loading = true;
            $scope.errors = {};
            $http.put('/api/accounts/' + $scope.account.id, $scope.account)
                .then(function(response) {
                    $scope.loading = false;
                    if (window.toastr) toastr.success('Berhasil memperbarui akun!');
                    window.location.href = '/admin/account';
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    }
                });
        };

        $scope.initPassword = function(id, name, email) {
            $scope.account = { id: id, name: name, email: email, new_password: '' };
        };

        $scope.updateAccountPassword = function() {
            $scope.loading = true;
            $scope.errors = {};
            $http.post('/api/accounts/' + $scope.account.id + '/password', { new_password: $scope.account.new_password })
                .then(function(response) {
                    $scope.loading = false;
                    if (window.toastr) toastr.success('Berhasil memperbarui password akun!');
                    window.location.href = '/admin/account';
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    }
                });
        };

        $scope.deleteAccount = function(id) {
            if (!confirm('Yakin ingin menghapus data?')) return;
            $http.delete('/api/accounts/' + id)
                .then(function() {
                    if (window.toastr) toastr.success('Berhasil menghapus akun!');
                    $scope.loadAccounts();
                });
        };
    }]);

    // Job Application Management Controller
    app.controller('AppliedController', ['$scope', '$http', function($scope, $http) {
        $scope.applications = [];
        $scope.stats = { linkedin: 0, glints: 0, jobstreet: 0, indeed: 0, pintarnya: 0, ekrut: 0 };
        $scope.search = '';
        $scope.loading = false;
        $scope.app = { company: '', role: '', platform: '', description: '', apply_at: '', status: '', link: '' };
        $scope.errors = {};

        $scope.loadApplications = function() {
            $scope.loading = true;
            $http.get('/api/applications', { params: { search: $scope.search } })
                .then(function(response) {
                    $scope.applications = response.data.data || response.data;
                    $scope.loading = false;
                });
        };

        $scope.loadStats = function() {
            $http.get('/api/applications/stats')
                .then(function(response) {
                    $scope.stats = response.data;
                });
        };

        $scope.createApplication = function() {
            $scope.loading = true;
            $scope.errors = {};
            $http.post('/api/applications', $scope.app)
                .then(function() {
                    $scope.loading = false;
                    if (window.toastr) toastr.success('Berhasil menambahkan lamaran pekerjaan!');
                    window.location.href = '/user/applied';
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    }
                });
        };

        $scope.initEdit = function(id) {
            $http.get('/api/applications/' + id)
                .then(function(response) {
                    var data = response.data;
                    $scope.app = data;
                    if (data.apply_at) {
                        $scope.app.apply_at = data.apply_at.split('T')[0];
                    }
                });
        };

        $scope.updateApplication = function() {
            $scope.loading = true;
            $scope.errors = {};
            $http.put('/api/applications/' + $scope.app.id, $scope.app)
                .then(function() {
                    $scope.loading = false;
                    if (window.toastr) toastr.success('Berhasil memperbarui lamaran kerja!');
                    window.location.href = '/user/applied';
                }, function(error) {
                    $scope.loading = false;
                    if (error.status === 422 && error.data.errors) {
                        $scope.errors = error.data.errors;
                    }
                });
        };

        $scope.deleteApplication = function(id) {
            if (!confirm('Yakin ingin menghapus data?')) return;
            $http.delete('/api/applications/' + id)
                .then(function() {
                    if (window.toastr) toastr.success('Berhasil menghapus lamaran kerja!');
                    $scope.loadApplications();
                });
        };
    }]);

})();
