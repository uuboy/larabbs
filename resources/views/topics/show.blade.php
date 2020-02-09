@extends('layouts.app')

@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

<div class="row">

    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 topic-content">
        <div class="topic_img">
            <img class="img-responsive" src="{{ $topic->cover }}" style="width: 100%;">
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    产品：{{ $topic->title }}
                </h1>

                <div class="article-meta text-center">
                    {{ $topic->created_at->diffForHumans() }}
                    ⋅
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    {{ $topic->reply_count }}
                </div>

                <div class="topic-body">
                    {!! $topic->body !!}
                </div>

                @can('update', $topic)
                    <div class="operate">
                        <hr>
                        <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>

                        <form action="{{ route('topics.destroy', $topic->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left: 12px">
                                <i class="glyphicon glyphicon-trash"></i>
                                删除
                            </button>
                        </form>
                    </div>
                @endcan

            </div>
        </div>

        {{-- 用户回复列表 --}}
        <div class="panel panel-default topic-reply">
            <div class="panel-body">
                @guest
                    如您对我们的产品感兴趣或有宝贵意见建议，请点击此处
                    <a href="{{ route('register') }}">
                      <button type="button" class="btn btn-success">注册</button>
                    </a>
                    或点击
                    <a href="{{ route('login') }}">
                      <button type="button" class="btn btn-primary">登陆</button>
                    </a>
                    留下您的联系方式，方便我们与您取得联系。
                @else
                  @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])
                  @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->get()])
                @endguest
            </div>
        </div>
    </div>
</div>
@stop
