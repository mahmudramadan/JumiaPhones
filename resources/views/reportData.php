<table class="table table-striped" id="phoneTable">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Country code</th>
            <th scope="col">Country</th>
            <th scope="col">Phone number</th>
            <th scope="col">State</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($phonesData) {
            foreach ($phonesData as $value) {
        ?>
        <tr>
            <th scope="col"><?= $value['name'] ?></th>
            <th scope="col"><?= $value['countryCode'] ?></th>
            <th scope="col"><?= $value['country'] ?></th>
            <th scope="col"><?= $value['phone'] ?></th>
            <th scope="col"><?= $value['phoneState'] ?></th>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>