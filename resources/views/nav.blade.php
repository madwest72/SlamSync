<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a>equipes</a></li>
                <li><a>matchs</a></li>
                <li><a>leaderboard</a></li>
                <li><a>mon profil</a></li>
                <li><a>se déconnecter</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">SlamSync</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('listeAll') }}">Équipes</a></li>
            <li><a href="{{ route('listeAllgame') }}">Matchs</a></li>
            <li><a>leaderbord</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <details>
            <summary>Profil</summary>
            <ul class="p-2 bg-base-100 w-40 z-1">
                <li><a>voir mon profil</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left">Se déconnecter</button>
                    </form>
                </li>
            </ul>
        </details>
    </div>
</div>
