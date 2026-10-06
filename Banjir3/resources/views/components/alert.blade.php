@props(['type' => 'success', 'message' => ''])

<div style="padding:10px 14px; border:1px solid {{ $type === 'error' ? '#e05050' : '#4caf78' }}; border-radius:6px; margin:10px 0; background:{{ $type === 'error' ? 'rgba(224,80,80,.1)' : 'rgba(76,175,120,.1)' }};">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>