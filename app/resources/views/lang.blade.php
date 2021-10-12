@extends('layouts.app')

@section('content')
<div class="container full-height welcome ">
  <div class="row">
            <div class="col-md-2 col-md-offset-6 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>日本語</option>
                    <option value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>Tiếng Việt</option>
                </select>
            </div>
        </div>
        <h1>{{ __('messages.title') }}</h1>
</div>
@endsection
