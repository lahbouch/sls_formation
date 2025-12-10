<!-- Floating Action Button -->
<style>
    .fab-button {
        position: fixed;
        bottom: 24px;
        right: 24px;
        width: 56px;
        height: 56px;
        background-color: #113C66;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .fab-button:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        transform: scale(1.1);
    }
    
    .fab-button svg {
        width: 24px;
        height: 24px;
        color: white;
        transition: transform 0.3s ease;
    }
    
    .fab-button:hover svg {
        transform: rotate(90deg);
    }
</style>
<a 
    href="{{ route('offres.search') }}" 
    class="fab-button"
    aria-label="Rechercher des offres"
    title="Rechercher des offres"
>
    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
    </svg>
</a>

