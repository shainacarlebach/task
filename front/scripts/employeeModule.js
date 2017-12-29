var employeeModule = function () {
    employeeApiMethod =  'employee';

    employeeApiUrl = 'back/api/employeeApi.php';
    return {
        Create: function () {
            jQuery.post(employeeApiUrl).always(function (data) {
                console.log(data);
            });
        },
        Read: function () {
            jQuery.get(employeeApiUrl).always(function (data) {
                console.log(data);
            });
        },
        Update: function () {
            jQuery.ajax({
                url: employeeApiUrl,
                type: 'UPDATE',
                success: function (result) {
                    console.log(result);
                }
            });

        },
        Delete: function () {
            jQuery.ajax({
                url: employeeApiUrl,
                data: {
                    ctrl: employeeApiMethod
                },
                type: 'DELETE',
               success: function (result) {
                    console.log(result);
                }
            });

        },
        getEmployeeById: function (id,callback) {
            var data = {
                ctrl: employeeApiMethod
            };
            if (id)
                data.id = id;

            jQuery.ajax({
                url: 'back/api/api.php',
                data: data ,
                type: 'GET',
                success: function (result) {
                
                    callback(JSON.parse(result));
                }
            });
        }
    }
};