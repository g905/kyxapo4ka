<x-mail::message>
    # Новое сообщение с сайта

    Имя: {{ $data['name'] }}
    Сообщение: {{ $data['message'] }}

    С наилучшими пожеланиями,
    {{ config('app.name') }}
</x-mail::message>
