<template>
  <AModal v-model:open="isOpen" :footer="null" @cancel="isSend = false">
    <div class="p-[16px]">
      <div v-if="isSend">
        <p class="text-[16px] font-bold mb-[20px]">Спасибо за заявку</p>
        <p class="mb-[20px]">Мы свяжемся с вами в ближайшие рабочие часы.</p>
        <p class="text-slate-300">График работы - Пн. – Сб.: 10:00 - 19:00</p>
        <p>Алматы, ул. Диваева 33</p>
      </div>
      <AForm
        v-if="!isSend"
        layout="vertical"
        :model="form"
        name="normal_login"
        @finish="submit"
        :rules="rules"
      >
        <AFormItem label="Какая услуга вас интересует?" name="service">
          <ASelect
            v-model:value="form.service"
            placeholder="Услуга"
            :options="options"
            size="large"
          />
        </AFormItem>
        <AFormItem label="Ваш телефон" name="phone">
          <div class="relative mt-2 rounded-md shadow-sm">
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
            >
              <span class="text-gray-500 sm:text-sm">
                <Icon name="mdi:phone" class="text-gray-500 sm:text-sm" />
              </span>
            </div>
            <input
              type="text"
              v-model="form.phone"
              placeholder="+7"
              v-maska
              data-maska="+7 ### ###-##-##"
              required
              class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            />
          </div>
        </AFormItem>
        <AFormItem label="Ваше имя" name="name">
          <AInput v-model:value="form.name" placeholder="Ваше имя" size="large" />
        </AFormItem>
        <AFormItem name="car" label="Какое у вас авто (марка, модель и год)?">
          <AInput
            v-model:value="form.car"
            placeholder="Какое у вас авто (марка, модель и год)?"
            size="large"
          />
        </AFormItem>
        <AButton
          html-type="submit"
          size="large"
          class="px-[16px] bg-silver border rounded text-slate-900 py-[8px] text-center font-[Nunito] font-bold w-full"
        >
          Отправить
        </AButton>
      </AForm>
    </div>
  </AModal>
</template>

<script setup lang="ts">
import { useOrderStore } from '~/store/oder.store';
import { vMaska } from 'maska';

const orderStore = useOrderStore();
const { isOpen } = storeToRefs(orderStore);
const isSend = ref(false);

const options = [
{ label: 'Замена масла', value: 'Замена_масла' },
{ label: 'Автосервис', value: 'Автосервис' },
{ label: 'Поклейка пленки', value: 'Поклейка_пленки' },
{ label: 'Химчистка', value: 'Химчистка' },
{ label: 'Полировка', value: 'Полировка' },
{ label: 'Вытягивание вмятин', value: 'Вытягивание_вмятин' },
{ label: 'Несколько услуг', value: 'Несколько_услуг' },
];

const form = reactive({
  name: '',
  service: '',
  car: '',
  phone: '+7',
});

const rules = {
  service: [{ required: true, message: 'Пожалуйста выберите услугу', trigger: 'change' }],
};

const sendData = async () => {
  // Создаем объект FormData и добавляем в него значения полей формы
  const formData = new FormData();
  formData.append('service', form.service);
  formData.append('car', form.car);
  formData.append('phone', form.phone);
  formData.append('name', form.name);

  // Отправляем запрос на сервер
  const response = await fetch('form.php', {
    method: 'POST',
    body: formData,
  });
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.text();
};

const submit = async () => {
  console.log(form);
  await sendData();
  isSend.value = true;
};
</script>

<style scoped></style>
