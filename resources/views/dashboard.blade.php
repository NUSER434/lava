<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная страница') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-4">Панель управления</h1>

<!-- Форма создания новой заявки -->
<div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Создать новую заявку</h2>
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Адрес</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="contact" class="block text-sm font-medium text-gray-700">Контактные данные</label>
            <input type="text" name="contact" id="contact" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Дата услуги</label>
            <input type="date" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700">Время услуги</label>
            <input type="time" name="time" id="time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="service_id" class="block text-sm font-medium text-gray-700">Тип услуги</label>
            <select name="service_id" id="service_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="payment" class="block text-sm font-medium text-gray-700">Тип оплаты</label>
            <select name="payment" id="payment" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="payment">Наличные</option>
                <option value="payment">Банковская карта</option>
            </select>
        </div>
        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Создать заявку</button>
        </div>
    </form>
</div>

<!-- История заявок -->
<div>
    <h2 class="text-xl font-semibold mb-4">История заявок</h2>
    @if($reports->isEmpty())
        <p>У вас пока нет заявок.</p>
    @else
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Адрес</th>
                    <th class="py-2">Контактные данные</th>
                    <th class="py-2">Дата услуги</th>
                    <th class="py-2">Время услуги</th>
                    <th class="py-2">Тип услуги</th>
                    <th class="py-2">Тип оплаты</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td class="py-2">{{ $report->address }}</td>
                        <td class="py-2">{{ $report->contact }}</td>
                        <td class="py-2">{{ $report->date }}</td>
                        <td class="py-2">{{ $report->time }}</td>
                        <td class="py-2">{{ $report->service->title }}</td>
                        <td class="py-2">{{ $report->payment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
