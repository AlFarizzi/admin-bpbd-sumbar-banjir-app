<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Admin</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Nama Admin</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($admin) ? $admin->nama_admin : old('nama_admin')}}"
                                    type="text"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="nama_admin"
                                    placeholder="Nama Admin">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                    @error('nama_admin')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Alamat Admin</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($admin) ? $admin->alamat : old('alamat')}}"
                                    {{-- value="{{isset($informasi) ? $informasi->info_judul : ""}}" --}}
                                    type="text"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="alamat"
                                    placeholder="Alamat Admin">
                                    <div class="form-control-position">
                                        <i class="feather icon-mail"></i>
                                    </div>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">No.Telpon</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($admin) ? $admin->telepon : old('notelpon')}}"
                                    {{-- value="{{isset($informasi) ? $informasi->info_judul : ""}}" --}}
                                    type="number"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="notelpon"
                                    placeholder="No.Telpon Admin">
                                    <div class="form-control-position">
                                        <i class="feather icon-phone"></i>
                                    </div>
                                    @error('notelpon')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Email</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($admin) ? $admin->email : old('email')}}"
                                    {{-- value="{{isset($informasi) ? $informasi->info_judul : ""}}" --}}
                                    type="email"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="email"
                                    placeholder="Email Admin">
                                    <div class="form-control-position">
                                        <i class="feather icon-mail"></i>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Username</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($admin) ? $admin->username : old('username')}}"
                                    {{-- value="{{isset($informasi) ? $informasi->info_judul : ""}}" --}}
                                    type="text"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="username"
                                    placeholder="Username">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                    @error('username')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Password</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    {{-- value="{{isset($informasi) ? $informasi->info_judul : ""}}" --}}
                                    type="password"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="password"
                                    placeholder="Password">
                                    <div class="form-control-position">
                                        <i class="feather icon-lock"></i>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
