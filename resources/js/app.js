import "./bootstrap";

class ComponentInteract {
    /**
     * Class Component Interact
     * @param {HTMLElement} component - Element of the component
     * @param {string} key - key when component interacted
     */
    constructor(component, key) {
        this._component = component;
        this._key = key;
    }

    /**
     * Component interacting
     */
    interact() {
        this._component.classList.toggle(this._key);
    }

    /**
     * Toggling Aria key
     * @param {string} ariaKey - aria key to toggle
     */
    toggleAria(ariaKey) {
        if (this._component.classList.contains(classkey))
            this._component.setAttribute(ariaKey, "true");
        else this._component.setAttribute(ariaKey, "false");
    }

    /**
     * Set Placement
     * It's casually used in dropdown
     * @param {string | null} placement - placement of component
     */
    setPlacement(placement) {
        const classPlacement = this.getClassPlacement(placement);
        const isComponentHaveClassPlacement = classPlacement.every(cp => this._component.classList.contains(cp))

        if (!isComponentHaveClassPlacement) this._component.classList.add(...classPlacement)
    }

    getClassPlacement(placement) {
        switch (placement) {
            case "top-left":
                return ["justify-start", "items-start"];
            case "top-center":
                return ["justify-center", "items-start"];
            case "top-right":
                return ["justify-end", "items-start"];
            case "center-left":
                return ["justify-start", "items-center"];
            case "center":
            default:
                return ["justify-center", "items-center"];
            case "center-right":
                return ["justify-end", "items-center"];
            case "bottom-left":
                return ["justify-start", "items-end"];
            case "bottom-center":
                return ["justify-center", "items-end"];
            case "bottom-right":
                return ["justify-end", "items-end"];
        }
    }
}

/**
 * Basic collapse js
 */
document.querySelectorAll("[data-collapse-toggle]").forEach(function (t) {
    t.addEventListener("click", function (e) {
        const collapseComponent = document.getElementById(
            t.getAttribute("data-collapse-toggle")
        );
        if (!collapseComponent) return;
        const ci = new ComponentInteract(collapseComponent, "hidden");

        ci.interact();
        ci.toggleAria("aria-expanded");
    });
});

/**
 * Basic dropdown js
 */
document.querySelectorAll("[data-dropdown-toggle]").forEach(function (t) {
    t.addEventListener("click", function (e) {
        const dropdownComponent = document.getElementById(
            t.getAttribute("data-dropdown-toggle")
        );
        const dropdownPlacement = t.getAttribute("data-dropdown-placement");
        if (!dropdownComponent) return;
        const ci = new ComponentInteract(dropdownComponent, "hidden");

        ci.interact();
        ci.setPlacement(dropdownPlacement);
    });
});
