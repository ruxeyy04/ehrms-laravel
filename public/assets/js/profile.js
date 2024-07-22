 /*========== RESPONSIVE DATA TABLE EMPLOYEE LIST===========*/
 var responsiveDataTable = $("#family-table-list");

 if (responsiveDataTable.length !== 0) {
    responsiveDataTable.DataTable({
        dom: '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
    });
}

 function dataEmployeeReload() {
     dataTableEmployee.ajax.reload();
 }