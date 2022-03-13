
@extends('admin.layouts.app')

@section('title', 'A vue base SPA Admin panel.')

@section('content')
    <div class="home-container bg-white row">
        <div class="document-wrapper columns is-mobile mx-auto is-relative col-lg-4 col-sm-10" style="top: 40vh;">
            <div class="card column border-0">
                <div class="card-content">
                    <p class="title is-4">
                        Share Book || API
                    </p>
                    <p class="subtitle is-8">
                        This Document will help you to move onwards with our API service.
                    </p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                  <span>
                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Documentation</a>
                  </span>
                    </p>
                    <p class="card-footer-item">
                  <span>
                    Share on <a href="#">Facebook</a>
                  </span>
                    </p>
                </footer>
            </div>
        </div>
    </div>
@endsection
