
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daerah</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Nama Kecamatan</label>
                                <div class="position-relative has-icon-left">
                                    {{-- Dropdown --}}
                                    <select
                                    name="kecamatan"
                                    onchange="getDesa(this)"
                                    class="js-example-basic-single form-control" id="kecamatan" >
                                        <option selected value="{{null}}" disabled>Pilih Kecamatan</option>
                                        @foreach ($kec as $kc)
                                            <option value="{{$kc->id_kecamatan}}">{{$kc->nama_kecamatan}}</option>
                                        @endforeach
                                      </select>
                                    {{-- Dropdown --}}
                                      @isset($data)
                                          <p style="display: initial" class="invalid-feedback">*Kosongkan Jika Tidak Melakukan Edit Pada Kecamatan</p>
                                      @endisset
                                    @error('kecamatan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Nama Desa/Kelurahan</label>
                                {{-- Dropdown --}}
                                <select id="desa" class="form-control" name="kelurahan">
                                    <option value="{{null}}" disabled selected>Pilih Desa/Kelurahan</option>
                                </select>
                                {{-- Dropdown --}}
                                @isset($data)
                                          <p style="display: initial" class="invalid-feedback">*Kosongkan Jika Tidak Melakukan Edit Pada Desa / Kelurahan</p>
                                @endisset
                                @error('kelurahan')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Luas Bahaya</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    value="{{isset($data) ? $data->luas_bahaya : ""}}"
                                    type="text"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="luas"
                                    placeholder="Luas Bahaya">
                                    <div class="form-control-position">
                                        <i class="feather icon-airplay"></i>
                                    </div>
                                    @error('luas')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Kelas Bahaya</label>
                                <div class="position-relative has-icon-left">
                                    <select name="kelas" class="js-example-basic-single form-control" name="state">
                                        @foreach ($kelas as $kl)
                                            <option
                                            {{isset($data) && $data->id_kelas === $kl->id_kelas ? "selected" : ""}}
                                            value="{{$kl->id_kelas}}">{{$kl->nama_kelas}}</option>
                                        @endforeach
                                      </select>
                                    @error('kelas')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-icon">Foto</label>
                                <div class="position-relative has-icon-left">
                                    <input
                                    type="file"
                                    id="email-id-icon"
                                    class="form-control"
                                    name="foto">
                                    <div class="form-control-position">
                                        <i class="feather icon-upload"></i>
                                    </div>
                                    @isset($data)
                                          <p style="display: initial" class="invalid-feedback">*Kosongkan Jika Tidak Melakukan Edit Pada Foto</p>
                                    @endisset
                                    {{-- @error('nama_costumer')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row"> --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email-id-icon">Latitude</label>
                                    <div class="position-relative has-icon-left">
                                        <input
                                        type="text"
                                        id="email-id-icon"
                                        class="form-control"
                                        value="{{isset($data) ? $data->lat : ""}}"
                                        name="latitude"
                                        placeholder="Latitude">
                                        <div class="form-control-position">
                                            <i class="feather icon-map-pin"></i>
                                        </div>
                                        @error('latitude')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email-id-icon">Longtitude</label>
                                    <div class="position-relative has-icon-left">
                                        <input
                                        type="text"
                                        id="email-id-icon"
                                        class="form-control"
                                        name="longtitude"
                                        value="{{isset($data) ? $data->lng : ""}}"
                                        placeholder="Longtitude">
                                        <div class="form-control-position">
                                            <i class="feather icon-map-pin"></i>
                                        </div>
                                        @error('longtitude')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
