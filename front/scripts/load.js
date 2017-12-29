$(document).ready(function(){
    $("#getEmployeeById").click(function(){
       
  let employeemodule = new employeeModule();
        employeemodule.getEmployeeById();
    }),

$("#Create").click(function(){
    let employeemodule = new employeeModule();
    employeemodule.Create();
}),
$("#update").click(function(){
    let employeemodule = new employeeModule();
    employeemodule.Update();
}),
$("#delete").click(function(){
    let employeemodule = new employeeModule();
    employeemodule.Delete();
}),
$("#Read").click(function(){
    let employeemodule = new employeeModule();
    employeemodule.Read();
})

}); 