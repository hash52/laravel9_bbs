@extends('layouts.app')

@section("title", "スレッド作成")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">スレッド作成</div>

                <div class="card-body">
                    <form method="POST" action="{{ route("thread.create") }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">タイトル</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">本文</label>

                            <div class="col-md-6">
                                <textarea rows="10" class="form-control" name="body"></textarea>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    作成
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
