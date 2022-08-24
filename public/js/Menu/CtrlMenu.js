// // var clients = [
// //     { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
// //     { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
// //     { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
// //     { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
// //     { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
// // ];

// // var countries = [
// //     { Name: "", Id: 0 },
// //     { Name: "United States", Id: 1 },
// //     { Name: "Canada", Id: 2 },
// //     { Name: "United Kingdom", Id: 3 }
// // ];

// $("#jsGrid").jsGrid({
//     width: "100%",
//     height: "400px",

//     inserting: true,
//     editing: true,
//     sorting: true,
//     paging: true,
//     deleteConfirm: "Do you really want to delete client?",
//     controller: {
//         // loadData: function(filter) {
//         //     return $.ajax({
//         //         type: "GET",
//         //         url: "http://localhost/jsgridphp/clients/index.php",
//         //         data: clientes
//         //     });
//         // },
//         insertItem: function(item) {
//             return $.ajax({
//                 type: "POST",
//                 url: "http://localhost/jsgridphp/clients/index.php",
//                 data: item
//             });
//         },
//         updateItem: function(item) {
//             return $.ajax({
//                 type: "PUT",
//                 url: "http://localhost/jsgridphp/clients/index.php",
//                 data: item
//             });
//         },
//         deleteItem: function(item) {
//             return $.ajax({
//                 type: "DELETE",
//                 url: "http://localhost/jsgridphp/clients/index.php",
//                 data: item
//             });
//         }
//     },
//     fields: [
//         { name: "Proyecto", type: "text", width: 150, validate: "required" },
//         { name: "Fecha", type: "text", width: 50 },
//         { name: "Materiales", type: "text", width: 200 },
//         { name: "Herramientas", type: "text", valueField: "Id", textField: "Name" },
//         { name: "Consumibles", type: "text", title: "Consumibles", sorting: false },
//         { name: "Destino", type: "text", title: "Destino", sorting: false },
//     ]
// });

$("#jsGrid").jsGrid({
    height: "90%",
    width: "100%",

    sorting: true,
    paging: true,


    fields: [
        { name: "Proyecto", type: "text", width: 150 },
        { name: "Fecha", type: "number", width: 50 },
        { name: "Materiales", type: "text", width: 200 },
        { name: "Herramientas", type: "text"},
        { name: "Destino", type: "text", title: "Destino" }
    ]
});