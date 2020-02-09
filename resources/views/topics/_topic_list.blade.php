@if (count($topics))
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="row topics-list">
                        @foreach ($topics as $topic)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 topic-item">
                                <div class="topic-content">
                                    <div class="top">
                                        <a href="{{ route('topics.show',$topic->id) }}">
                                          <div class="img-responsive img"><img src="{{ $topic->cover }}" alt=""></div>
                                          <div class="title">{{ $topic->title }}</div>
                                        </a>
                                    </div>
                                    <div class="bottom">
                                      <div class="view_count">点击数 ：<span>{{ $topic->view_count }}</span></div>
                                      <div class="reply_count">留言数 ：<span>{{ $topic->reply_count }}</span></div>
                                    </div>
                                    <div class="timeago">
                                        更新时间：{{ $topic->updated_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
