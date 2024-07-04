@extends('layouts.app')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">System Configuration</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('system-config.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="api_key" class="col-md-4 col-form-label text-md-right">API Key</label>

                                <div class="col-md-6">
                                    <input id="api_key" type="text" class="form-control @error('api_key') is-invalid @enderror" name="api_key" value="{{ old('api_key') }}" required autocomplete="api_key" autofocus>

                                    @error('api_key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="database_host" class="col-md-4 col-form-label text-md-right">Database Host</label>

                                <div class="col-md-6">
                                    <input id="database_host" type="text" class="form-control @error('database_host') is-invalid @enderror" name="database_host" value="{{ old('database_host') }}" required autocomplete="database_host" autofocus>

                                    @error('database_host')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="database_username" class="col-md-4 col-form-label text-md-right">Database Username</label>

                                <div class="col-md-6">
                                    <input id="database_username" type="text" class="form-control @error('database_username') is-invalid @enderror" name="database_username" value="{{ old('database_username') }}" required autocomplete="database_username" autofocus>

                                    @error('database_username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="database_password" class="col-md-4 col-form-label text-md-right">Database Password</label>

                                <div class="col-md-6">
                                    <input id="database_password" type="password" class="form-control @error('database_password') is-invalid @enderror" name="database_password" required autocomplete="database_password" autofocus>

                                    @error('database_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="database_name" class="col-md-4 col-form-label text-md-right">Database Name</label>

                                <div class="col-md-6">
                                    <input id="database_name" type="text" class="form-control @error('database_name') is-invalid @enderror" name="database_name" value="{{ old('database_name') }}" required autocomplete="database_name" autofocus>

                                    @error('database_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save Configuration
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
