<!-- resources/views/drivers/show.blade.php -->

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Driver Details</h5>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Number of Seats</h6>
                </div>
                <div class="card-body">
                    {{ $driver->number_seats }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Image</h6>
                </div>
                <div class="card-body">
                    {{ $driver->image }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Vehicle Type</h6>
                </div>
                <div class="card-body">
                    {{ $driver->typ_veicl }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Matricule</h6>
                </div>
                <div class="card-body">
                    {{ $driver->matricule }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Price</h6>
                </div>
                <div class="card-body">
                    {{ $driver->price }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Payment Method</h6>
                </div>
                <div class="card-body">
                    {{ $driver->method_payment }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">Description</h6>
                </div>
                <div class="card-body">
                    {{ $driver->description }}
                </div>
            </div>

        </div>
    </div>
</div>
