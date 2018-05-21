
<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        {{-- <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small> --}}
    </p>
    <p>
        <small><strong>With:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
    {{-- <td>
        {!!Form::open(['action' => ['MessagesController@destroy', $thread->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </td> --}}
    
</div>

<hr>