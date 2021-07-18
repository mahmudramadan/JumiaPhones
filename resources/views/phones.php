<!DOCTYPE html>
<html>

<head>
    <title>Jumia - Task</title>
    <link rel="stylesheet" href="./resources/assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Phone Numbers</h1>
        <form method="GET" action="/">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Select Country</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="country" id="country">
                                <option value="<?= $ALL_COUNTRY; ?>">All</option>
                                <option value="Morocco">Morroco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Cameroon">Cameroon</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Phone State</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="state" id='phoneState'>
                                <option value="<?= $ALL_PHONE_STATE; ?>">ALL</option>
                                <option value="<?= $PHONE_STATE_OK; ?>">Valid</option>
                                <option value="<?= $PHONE_STATE_NOK; ?>">Invalid</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <div id="reportData"></div>
    </div>
</body>
<script src="./resources/assets/js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

</html>
<script>
$(document).ready(function() {
    $('form').submit();
});
$('form').submit(function() {
    var country = $("#country").val();
    var phoneState = $("#phoneState").val();
    LoadData(country, phoneState);
    return false;
});

function LoadData(country, phoneState) {
    $.ajax({
        type: "get",
        url: "<?= BASE_URL ?>phoneData.php?country=" + country + "&phoneState=" + phoneState,
        data: {
            country: country,
            phoneState: phoneState
        },
        success: function(result) {
            $("#reportData").html(result);
            $("#phoneTable").DataTable();
        }
    });
}
</script>