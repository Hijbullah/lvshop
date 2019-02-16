<template>
    <section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="float-left"><strong>All</strong> Admins</h2>
                            <div class="header-right float-right">
                                <button  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin-modal">Add New</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                <tr>
                                    <th style="width:60px;">Sl.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                    <tr v-for="admin in admins" :key="admin.id">
                                        <td>{{ admin.id }}</td>
                                        <td>{{ admin.name }}</td>
                                        <td>{{ admin.email }}</td>
                                        <td>{{  }}</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-info btn-sm waves-effect"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-success waves-effect waves-float btn-sm waves-light"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger waves-effect waves-float btn-sm waves-light"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="admin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Add New Admin</h4>
                </div>
                <div class="modal-body"> 
                    <form action="">
                        <div class="form-group">  
                            <label class="label" for="name">Name</label> 
                            <input type="text" id="name" class="form-control" value="" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">  
                            <label class="label" for="email">Email</label> 
                            <input type="text" id="email" class="form-control" value="" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">  
                            <label class="label" for="password">Password</label> 
                            <input type="password" id="password" class="form-control" value="" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">  
                            <label class="label" for="password-confirm">Confirm Password</label> 
                            <input type="password" id="password-confirm" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>
    export default {
        data(){
            return {
                admins: ''

            }
        },
        created() {
            axios.get('/admin/admins/all')
            .then(function (response) {
                this.admins = response.data;
                console.log(response.data);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
