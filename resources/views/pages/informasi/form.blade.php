
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Informasi</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Judul Informasi</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($informasi) ? $informasi->info_judul : ""}}"
                                    type="text"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="judul_informasi"
                                    placeholder="Judul Informasi">
                                    <div class="form-control-position">
                                        <i class="feather icon-user"></i>
                                    </div>
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Nama Desa/Kelurahan</label>
                                {{-- Dropdown --}}
                                <select id="desa" class="form-control js-example-basic-single" name="kelurahan">
                                    <option value="{{null}}" disabled selected>Pilih Desa/Kelurahan</option>
                                    @foreach ($kelurahan as $kel)
                                        <option
                                        {{isset($informasi) && $informasi->id_kelurahan === $kel->id_kelurahan ? "selected" : ""}}
                                        value="{{$kel->id_kelurahan}}">{{$kel->nama_kelurahan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Informasi</label>
                                <div class="position-relative has-icon-left">
                                    <textarea name="informasi" id="" cols="30" rows="10" class="form-control">
                                        {{isset($informasi) ? $informasi->info_isi : ""}}
                                    </textarea>
                                    @error('informasi')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Gambar</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    type="file"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="gambar"
                                    placeholder="Judul Informasi">
                                    <div class="form-control-position">
                                        <i class="feather icon-upload"></i>
                                    </div>
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
