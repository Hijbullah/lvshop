@extends('backend.layouts.master')

@section('page-title', 'Blank Page')
@section('page-header', 'Blank Page')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-body">
                        <h5 class="card-title">Blank Page</h5>
                        <p class="card-text">
                            Blank Page Sample 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">Table Example</h3>
                        <a href="" class="btn btn-sm btn-success btn-flat text-white float-right">
                            <i class="fas fa-plus-circle"></i> Button
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                               
                                <tr>
                                    <td> 01 </td>
                                    <td>Example</td>
                                    
                                    <td>
                                        <span class="badge bg-danger">55%</span>
                                        <span class="badge bg-success">55%</span>
                                    </td>
                                    <td>
                                        <a href="" title="View" class="btn btn-primary btn-sm text-white mr-2"><i class="fas fa-eye"></i></a>
                                        <a href="" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="" title="DELETE" class="btn btn-sm btn-danger text-white category-delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item">
                                <a class="page-link" href="#">«</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">»</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-success">
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">Advanced form element (select2, icheck)</h3>
                        <a href="" class="btn btn-sm btn-success btn-flat text-white float-right">
                            <i class="fas fa-plus-circle"></i> Button
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                            </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Disabled</label>
                                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Multiple</label>
                                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                            </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Disabled Result</label>
                                    <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option disabled="disabled">California (disabled)</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                            </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-3">
                                 <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal" checked>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal">
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal" disabled>
                                        Minimal skin checkbox
                                    </label>
                                </div>
            
                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="r1" class="minimal" checked>
                                    </label>
                                    <label>
                                        <input type="radio" name="r1" class="minimal">
                                    </label>
                                    <label>
                                        <input type="radio" name="r1" class="minimal" disabled>
                                        Minimal skin radio
                                    </label>
                                </div>
            
                                <!-- Minimal red style -->
            
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal-red" checked>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-red">
                                    </label>
                                    <label>
                                        <input type="checkbox" class="minimal-red" disabled>
                                        Minimal red skin checkbox
                                    </label>
                                </div>
            
                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="r2" class="minimal-red" checked>
                                    </label>
                                    <label>
                                        <input type="radio" name="r2" class="minimal-red">
                                    </label>
                                    <label>
                                        <input type="radio" name="r2" class="minimal-red" disabled>
                                        Minimal red skin radio
                                    </label>
                                </div>
            
                                <!-- Minimal red style -->
            
                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="flat-red" checked>
                                    </label>
                                    <label>
                                        <input type="checkbox" class="flat-red">
                                    </label>
                                    <label>
                                        <input type="checkbox" class="flat-red" disabled>
                                        Flat green skin checkbox
                                    </label>
                                </div>
            
                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="r3" class="flat-red" checked>
                                    </label>
                                    <label>
                                        <input type="radio" name="r3" class="flat-red">
                                    </label>
                                    <label>
                                        <input type="radio" name="r3" class="flat-red" disabled>
                                        Flat green skin radio
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <p>Footer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">General Elements</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label>Text Disabled</label>
                                <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                            </div>
                
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea Disabled</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                            </div>
                
                            <!-- input states -->
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with
                                        success</label>
                                <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                        warning</label>
                                <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                                        error</label>
                                <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                            </div>
                
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="option1">
                                    <label class="form-check-label">Checkbox</label>
                                </div>
                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="option1" disabled="">
                                    <label class="form-check-label">Checkbox disabled</label>
                                </div>
                            </div>
                
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="option1">
                                    <label class="form-check-label">Radio</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="option1" disabled="">
                                    <label class="form-check-label">Radio disabled</label>
                                </div>
                            </div>
                
                            <!-- select -->
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Select Disabled</label>
                                <select class="form-control" disabled="">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                            </div>
                
                            <!-- Select multiple-->
                            <div class="form-group">
                                <label>Select Multiple</label>
                                <select multiple="" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Select Multiple Disabled</label>
                                <select multiple="" class="form-control" disabled="">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                            </div>
                
                        </form>
                    </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Sign in</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-header">
            <h3 class="card-title">
                CKEditor5
                <small>Advanced and full of features</small>
            </h3>
            <!-- tools box -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="remove"
                        data-toggle="tooltip"
                        title="Remove">
                <i class="fa fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="mb-3">
                <textarea id="editor1" name="editor1" style="width: 100%">This is my textarea to be replaced with CKEditor.</textarea>
            </div>
            <p class="text-sm mb-0">Please adhere to the <a href="https://ckeditor.com/ckeditor-5-builds/#classic">CKEditor</a>
                license when using it!</p>
            </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline card-info">
            <div class="card-header">
            <h3 class="card-title">
                Bootstrap WYSIHTML5
                <small>Simple and fast</small>
            </h3>
            <!-- tools box -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
            <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <p class="text-sm mb-0">
                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                information.</a>
            </p>
            </div>
        </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
@endsection

@push('page-css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/select2.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/all.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush



@push('page-scripts')
    <!-- Select2 -->
    <script src="{{ asset('backend/plugins/select2/select2.full.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
            });
        });
    </script>
    <!-- CK Editor -->
    <script src="{{ asset('backend/plugins/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(function (editor) {
            // The editor instance
        })
        .catch(function (error) {
            console.error(error)
        })

        // bootstrap WYSIHTML5 - text editor

        $('.textarea').wysihtml5({
        toolbar: { fa: true }
        })
    })
    </script>
@endpush

