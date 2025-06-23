import { defineStore } from 'pinia';

export const useOrderStore = defineStore('orderStore', () => {
  const isOpen = ref(false);

  const toggleOpen = () => {
    isOpen.value = !isOpen.value;
  };
  return {
    isOpen,
    toggleOpen,
  };
});