<style>
    /* Fix black screen issue when filtering in Filament */
    html, body {
        background-color: #f9fafb !important;
        min-height: 100vh !important;
    }
    
    /* Prevent view transitions from interfering */
    :root:active-view-transition {
        view-transition-name: none !important;
    }
    
    ::view-transition {
        display: none !important;
    }
    
    /* Ensure Filament content is always visible */
    .fi-body {
        background-color: #f9fafb !important;
        min-height: 100vh !important;
    }
    
    /* Fix for Livewire updates */
    [wire\:loading] {
        opacity: 0.6;
    }
    
    /* Ensure modals and overlays work correctly */
    .fi-modal-overlay {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }
    
    /* Prevent CSS conflicts from main site */
    .fi-main {
        background-color: #f9fafb !important;
    }
    
    /* Fix table filtering */
    .fi-ta-content {
        background-color: white !important;
    }
</style>

