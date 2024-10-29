<nav>
    <x-navlink href="/home" :active="request()->is('home')">Home</x-navlink>
    <x-navlink href="/contacts" :active="request()->is('contacts') or (request()->is('contacts/*'))">Contacts</x-navlink>
    <x-navlink href="/" :active="request()->is('/')">Root</x-navlink>
</nav>
