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
    
    /* Hide overlay when aria-hidden is true */
    .fi-modal-close-overlay[aria-hidden="true"] {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        pointer-events: none !important;
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

<script>
    // Fix modal overlay blocking interactions when modal window is hidden
    (function() {
        'use strict';
        
        function hideHiddenModals() {
            // Find all modal containers with x-show="isOpen"
            document.querySelectorAll('[x-show*="isOpen"]').forEach(function(container) {
                let shouldHide = false;
                
                // Check Alpine.js state if available
                if (window.Alpine && container._x_dataStack && container._x_dataStack.length > 0) {
                    const data = container._x_dataStack[0];
                    if (data && typeof data.isOpen !== 'undefined' && !data.isOpen) {
                        shouldHide = true;
                    }
                }
                
                // Check if modal window inside is hidden
                const modalWindow = container.querySelector('.fi-modal-window');
                if (modalWindow) {
                    const isHidden = modalWindow.classList.contains('hidden') || 
                                   window.getComputedStyle(modalWindow).display === 'none';
                    if (isHidden) {
                        shouldHide = true;
                    }
                }
                
                if (shouldHide) {
                    // Hide entire container including overlay
                    container.style.display = 'none';
                    container.style.visibility = 'hidden';
                    container.style.pointerEvents = 'none';
                    container.style.opacity = '0';
                }
            });
            
            // Also hide overlays that are marked as hidden
            document.querySelectorAll('.fi-modal-close-overlay[aria-hidden="true"]').forEach(function(overlay) {
                overlay.style.display = 'none';
                overlay.style.visibility = 'hidden';
                overlay.style.opacity = '0';
                overlay.style.pointerEvents = 'none';
            });
        }
        
        // Run immediately
        hideHiddenModals();
        
        // Watch for changes
        const observer = new MutationObserver(function() {
            setTimeout(hideHiddenModals, 10);
        });
        
        // Start observing
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                observer.observe(document.body, {
                    childList: true,
                    subtree: true,
                    attributes: true,
                    attributeFilter: ['class', 'style', 'aria-hidden', 'x-show']
                });
            });
        } else {
            observer.observe(document.body, {
                childList: true,
                subtree: true,
                attributes: true,
                attributeFilter: ['class', 'style', 'aria-hidden', 'x-show']
            });
        }
        
        // Also run periodically to catch Alpine.js state changes
        setInterval(hideHiddenModals, 100);
    })();
</script>

