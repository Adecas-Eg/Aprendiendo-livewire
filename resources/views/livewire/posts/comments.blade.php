<div>
    @if ($comments)
        <div class="bg-white shadow mb-8 rounded-lg p-6 ">

            <ul>
                @foreach ($comments as $comment)
                    <li>
                        {{ $comment }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif
</div>
