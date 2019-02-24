<div class="modal fade" id="modal-admin" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <form @submit.prevent = "createMode ? registerAdmin() : updateAdmin()">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" @click="modalClose" class="close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 v-if="createMode" class="modal-title">Add New Admin</h4>
                    <h4 v-else class="modal-title">Update Admin</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="label" for="name">Name</label>
                        <input v-model="form.name" type="text" name="name" id="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Name">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input v-model="form.email" type="email" name="email" id="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Email">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <label class="label" for="password">Password</label>
                        <input v-model="form.password" type="password" name="password" id="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Password">
                        <has-error :form="form" field="password"></has-error>
                    </div>
                    <div class="form-group">
                        <label class="label" for="password-confirm">Confirm Password</label>
                        <input v-model="form.password_confirmation" type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" @click="modalClose" class="btn btn-default pull-left" >Close</button>
                    <button type="submit" v-if="createMode" class="btn btn-success">Add New Admin</button>
                    <button type="submit" v-else class="btn btn-primary">Update Admin</button>
                </div>
            </div>
        </form>
    </div>
</div>