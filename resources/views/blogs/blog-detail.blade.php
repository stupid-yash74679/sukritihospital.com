@extends('layout.main')
@section('meta-content')
    <title>{{ $blog['blog-pagename'] }}</title>
    <meta name="description"
        content="Experience top-notch oral surgery and maxillofacial treatments at Sukriti Hospital in Bharuch, led by the renowned Dr. Vihang Sukhadia. Offering advanced procedures including flap surgery, scar revision, and more. Book your consultation today!">
    <meta name="keywords"
        content="Oral Surgery Bharuch, Maxillofacial Surgery Bharuch, Oral Surgeon Bharuch, Dr. Vihang Sukhadia, Periodontal Flap Surgery Bharuch, Flap Surgery Bharuch, Scar Revision Surgery Bharuch, Otoplasty Bharuch, Oral Surgery Hospital Bharuch, Best Oral Surgeon Bharuch, Oral Health Services Bharuch, Dental Surgery Bharuch, Maxillofacial Surgeon Bharuch">
        <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
    <!--page title start-->

    <section class="page-title">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1>{{ $blog['blog-title'] }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <section class="custom-sec-padding themeht-blogs post-single-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="post-card">
                            <div class="post-image">
                                <img class="img-fluid" src="{{ $blog['banner-image'] }}" alt="">
                            </div>
                            <div class="post-desc">
                                <ul class="list-inline post-bottom">
                                    <li class="list-inline-item">
                                        <i class="bi bi-person-circle"></i> {{ $blog['blog-author'] }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi bi-calendar3"></i>{{ $blog['blog-date'] }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi bi-chat-right-text"></i>3 Comments
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi bi-tag"></i> {{ explode(',', $blog['blog-categories'])[0] }}
                                    </li>
                                </ul>
                                <div style="text-align: justify;">

                                    {!! $blog['blog-content'] !!}
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 post-comment">
                            <h2 class="comments-title mb-7"> {{ count($blog->comments) }} Reply on “
                                <span>{{ $blog['blog-title'] }}</span> “</h2>
                            <ul class="list-unstyled">
                                @foreach ($blog->comments as $item)
                                    <li>
                                        <div class="author-img">
                                            <img
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUuNTMyIDQ1LjUzMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHBhdGggZD0iTTIyLjc2Ni4wMDFDMTAuMTk0LjAwMSAwIDEwLjE5MyAwIDIyLjc2NnMxMC4xOTMgMjIuNzY1IDIyLjc2NiAyMi43NjVjMTIuNTc0IDAgMjIuNzY2LTEwLjE5MiAyMi43NjYtMjIuNzY1UzM1LjM0LjAwMSAyMi43NjYuMDAxem0wIDYuODA3YTcuNTMgNy41MyAwIDEgMSAuMDAxIDE1LjA2IDcuNTMgNy41MyAwIDAgMS0uMDAxLTE1LjA2em0tLjAwNSAzMi43NzFhMTYuNzA4IDE2LjcwOCAwIDAgMS0xMC44OC00LjAxMiAzLjIwOSAzLjIwOSAwIDAgMS0xLjEyNi0yLjQzOWMwLTQuMjE3IDMuNDEzLTcuNTkyIDcuNjMxLTcuNTkyaDguNzYyYzQuMjE5IDAgNy42MTkgMy4zNzUgNy42MTkgNy41OTJhMy4yIDMuMiAwIDAgMS0xLjEyNSAyLjQzOCAxNi43MDIgMTYuNzAyIDAgMCAxLTEwLjg4MSA0LjAxM3oiIGZpbGw9IiNjYmNiY2IiIG9wYWNpdHk9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
                                        </div>
                                        <div class="comments-body">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="author-title mb-0">{{ $item['name'] }}</h5>
                                                <div class="comment-date">{{ $item['date'] }}</div>
                                            </div>
                                            <p class="mb-0 mt-3">{{ $item['comment'] }}</p>
                                            <div class="comment-reply text-end mt-4">
                                                <a class="comment-reply-link" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="post-comments mt-10 box-shadow white-bg p-5 rounded">
                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                            <form id="commentForm">
                                <input type="hidden" name="parentcommentid" value="{{ $blog['parent-comment-id'] }}">
                                <input type="hidden" name="blogid" value="{{ $blog['id'] }}">
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Name" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Email" required="required"
                                                data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Comment *</label>
                                    <textarea id="form_message" name="comment" class="form-control h-100" placeholder="Comment" rows="4"
                                        required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <button type="submit" class="themeht-btn primary-btn mt-5">
                                    <span>Post Comment</span>
                                    <i class="flaticon-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="themeht-sidebar">
                            <div class="widget">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="recent-post">
                                    <ul class="list-unstyled">
                                        @foreach (App\Models\BlogModel::orderBy('id', 'desc')->take(5)->get() as $item)
                                            <li class="mb-3">
                                                <div class="recent-post-thumb">
                                                    <img class="img-fluid" src="{{ $item['thumbnail-image'] }}"
                                                        alt="">
                                                </div>
                                                <div class="recent-post-desc">
                                                    <a href="/blogs/{{ $item['id'] }}">{{ $item['blog-title'] }}</a>
                                                    <div class="post-date">{{ $item['blog-date'] }}</div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="widget-categories list-unstyled">
                                    @php
                                        $categories = explode(',', $blog['blog-categories']);
                                    @endphp
                                    @foreach ($categories as $category)
                                        <li><a href="javascript:void(0);"> {{ $category }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Popular Tags</h5>
                                <ul class="widget-tags list-inline">
                                    @php
                                        $tags = explode(',', $blog['blog-tags']);
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <li><a href="javascript:void(0);"> {{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
