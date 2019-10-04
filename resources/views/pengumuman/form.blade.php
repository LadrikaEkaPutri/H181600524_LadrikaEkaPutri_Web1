@csrf

                          <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('judul') }}</label>

                            <div class="col-md-8">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengumuman" class="col-md-4 col-form-label text-md-right">{{ __('Pengumuman') }}</label>
                
                            <div class="col-md-8">
                            <input id="pengumuman" type="text" class="form-control @error('pengumuman') is-invalid @enderror" name="pengumuman" value="{{ old('pengumuman') }}" required autofocus>

                                @error('pengumuman_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          
              

                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('isi') }}</label>

                            <div class="col-md-8">
                            <input id="isi" type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" value="{{ old('isi') }}" required autofocus>
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                               
                        <input id="nama" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" autofocus>

                                <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __(' Simpan Data') }}
                                </button>
                                <a href="{!! route('pengumuman.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                               </a>
                            </div>
                        </div>