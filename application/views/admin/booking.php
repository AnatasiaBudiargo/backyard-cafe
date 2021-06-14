<div class="Booking-List">

    <table class="table" style="width: 90%; margin: auto;">
    <h2 class="title" style="margin: 4vh;"> Booking List </h2>
    <thead class="thead-dark">
        <tr>
        <th scope="col">Firts Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Notes</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bookings as $book) : ?>
            <tr>
                <td><?= $book->FirstName ?></td>
                <td><?= $book->LastName ?></td>
                <td><?= $book->phone?></td>
                <td><?= $book->email?></td>
                <td><?= $book->alamat?></td>
                <td><?= $book->notes?></td>
                <td><?= $book->quantity?></td>
                <td><?= $book->date ?></td>
                <td><?= $book->time?></td>
            </tr>
        <?php endforeach; ?>
        
    </tbody>
    </table>

</div>


