<div class="export_filter">
    <a href="javascript:;" id="export-toggle-form">Export</a>
</div>

<div id="export-form-container">
 <div class="filter">
 <div class="row text-center">
  <form action="{{ route('requestexport') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12 col-12">
	<input type="date" name="from_date" class="form-control" id="inputDate">
	</div>
	<b>to</b>
	<div class="col-lg-12 col-12">
	<input type="date" name="to_date" class="form-control" id="inputDate">
	</div>
	<div class="col-lg-12 col-12">
	<input type="submit" class="btn btn-warning" value="Export">
	</div>
  </form>
 </div>
 </div>
</div>
