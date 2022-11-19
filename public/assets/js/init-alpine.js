function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
    }

    // else return their preferences
    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value)
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    },
    isNotificationsMenuOpen: false,
    toggleNotificationsMenu() {
      this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
    },
    closeNotificationsMenu() {
      this.isNotificationsMenuOpen = false
    },
    isProfileMenuOpen: false,
    toggleProfileMenu() {
      this.isProfileMenuOpen = !this.isProfileMenuOpen
    },
    closeProfileMenu() {
      this.isProfileMenuOpen = false
    },
    isPagesMenuOpen: false,
    togglePagesMenu() {
      this.isPagesMenuOpen = !this.isPagesMenuOpen
      // isKurikulumMenuOpen: false
    },
    isKurikulumMenuOpen: false,
    toggleKurikulumMenu() {
      this.isKurikulumMenuOpen = !this.isKurikulumMenuOpen
      // isPagesMenuOpen: false
    },
    isKelasUjianMenuOpen: false,
    toggleKelasUjianMenu() {
      this.isKelasUjianMenuOpen = !this.isKelasUjianMenuOpen
    },
    isAdmMenuOpen: false,
    toggleAdmMenu() {
      this.isAdmMenuOpen = !this.isAdmMenuOpen
    },
    isBlokKRSMenuOpen: false,
    toggleBlokKRSMenu() {
      this.isBlokKRSMenuOpen = !this.isBlokKRSMenuOpen
    },
    isTAMenuOpen: false,
    toggleTAMenu() {
      this.isTAMenuOpen = !this.isTAMenuOpen
    },
    isKPMenuOpen: false,
    toggleKPMenu() {
      this.isKPMenuOpen = !this.isKPMenuOpen
    },
    isRealisasiMenuOpen: false,
    toggleRealisasiMenu() {
      this.isRealisasiMenuOpen = !this.isRealisasiMenuOpen
    },
    isYudisiumMenuOpen: false,
    toggleYudisiumMenu() {
      this.isYudisiumMenuOpen = !this.isYudisiumMenuOpen
    },
    isWisudaMenuOpen: false,
    toggleWisudaMenu() {
      this.isWisudaMenuOpen = !this.isWisudaMenuOpen
    },
    isPDPTMenuOpen: false,
    togglePDPTMenu() {
      this.isPDPTMenuOpen = !this.isPDPTMenuOpen
    },
    // Modal
    isModalOpen: false,
    trapCleanup: null,
    openModal() {
      this.isModalOpen = true
      this.trapCleanup = focusTrap(document.querySelector('#modal'))
    },
    closeModal() {
      this.isModalOpen = false
      this.trapCleanup()
    },
  }
}
