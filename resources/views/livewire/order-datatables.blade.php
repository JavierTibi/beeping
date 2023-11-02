<!DOCTYPE html>
<html>
<head>
    <title>Beeping - Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="mt-4">
        <div class="card">
            <div class="card-header">
                Orders
            </div>
            <div class="card-body">
                <livewire:order-datatables theme="bootstrap-4" searchable="order_ref, customer_name" />
            </div>
        </div>
        </div>
    </div>
</body>

@livewireScripts

</html>
