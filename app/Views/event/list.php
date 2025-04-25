<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 col-12 col-md-6">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Event List</h2>
            <a href="<?=base_url("/event/create")?>" class="btn btn-primary">Add Event</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($events) && is_array($events) && !empty($events)){ ?>
                    <?php 
                        $count = 1;
                        foreach($events as $event){ ?>
                            <tr>
                                <th scope="row"><?=$count++?></th>
                                <td><?=$event['name']?></td>
                                <td><?=$event['venue']?></td>
                                <td><?=$event['date']?></td>
                            </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>