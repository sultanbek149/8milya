export default function getWhatsappUrl(phone: string, text?: string): string {
  if (text) {
    return `https://api.whatsapp.com/send?phone=${phone}&text=${encodeURI(text)}`;
  }
  return `https://api.whatsapp.com/send?phone=${phone}`;
}
