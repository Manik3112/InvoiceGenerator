<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body>
<center>
<br>
<form action="invoice.php" method="get" class="col-sm-4">
<label class="label label-primary">Company Name</label>
<input class="form-control" type="text" name="company" /><br>
<label class="label label-primary">Invoice Number </label>
<input class="form-control" type="text" name="ino" /><br>
<label class="label label-primary">GSTIN  : </label>
<input class="form-control" type="text" name="gst" /><br>
<label class="label label-primary">Client : </label>
<input class="form-control" type="text" name="client" /><br>
<label class="label label-primary">Project : </label>
<input class="form-control" type="text" name="project" /><br>
<label class="label label-primary">Description : </label>
<input class="form-control" type="text" name="description" /><br>
<label class="label label-primary">Amount : </label>
<input class="form-control" type="text" name="amount" /><br>
<input class="btn btn-success" type="submit" value="Submit" /><br>
</form>
</center>
</body>
</html>