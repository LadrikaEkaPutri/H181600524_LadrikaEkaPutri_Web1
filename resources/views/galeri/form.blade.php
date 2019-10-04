@csrf

                          <div class="form-group row">
                            <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('judul') }}</label>

                            <div class="col-md-10">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="galeri" class="col-md-2 col-form-label text-md-right">{{ __('Galeri') }}</label>
                
                            <div class="col-md-10">
                            <input id="galeri" type="text" class="form-control @error('galeri') is-invalid @enderror" name="galeri" value="{{ old('galeri') }}" required autofocus>

                                @error('kategori_artikel_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          
              

                        <div class="form-group row">
                            <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('isi') }}</label>

                            <div class="col-md-10">
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
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __(' Simpan Data') }}
                                </button>
                                <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                               </a>
                            </div>
                        </div>