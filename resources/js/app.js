import './bootstrap';
import api from './services/api';

// --- FUNGSI PRODUK ---
async function fetchProducts() {
    const container = document.getElementById('product-list');
    if (!container) return;

    try {
        const response = await api.get('/products');

        // Menangani struktur data Pagination dari Laravel
        const products = response.data.data || (Array.isArray(response.data) ? response.data : null);

        if (!products || products.length === 0) {
            container.innerHTML = '<p class="text-center text-slate-500">Belum ada produk tersedia.</p>';
            return;
        }

        container.innerHTML = '';
        products.forEach(product => {
            // foto_utama adalah array, ambil elemen pertama
            const urlGambar = Array.isArray(product.foto_utama) ? product.foto_utama[0] : product.foto_utama;
            const gambar = urlGambar || 'https://via.placeholder.com/400x300?text=No+Image';

            const isVideo = gambar && typeof gambar === 'string' && gambar.match(/\.(mp4|webm|ogg|mov)$/i);
            const mediaTag = isVideo
                ? `<video src="${gambar}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" controls muted autoplay loop playsinline></video>`
                : `<img src="${gambar}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.src='https://via.placeholder.com/400x300?text=Image+Not+Found'">`;

            container.innerHTML += `
                <div class="group cursor-pointer">
                    <div class="rounded-3xl overflow-hidden mb-6 h-64 lg:h-80 shadow-lg bg-slate-100">
                        ${mediaTag}
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <h3 class="text-xl font-bold text-slate-900">${product.nama_produk}</h3>
                        <p class="text-slate-500 leading-relaxed">${product.deskripsi || ''}</p>
                    </div>
                </div>`;
        });
    } catch (error) {
        console.error("Detail Error:", error);
        container.innerHTML = '<p class="text-center text-red-500">Gagal memuat produk. Cek koneksi backend.</p>';
    }
}

// --- FUNGSI GALLERY ---
async function fetchGallery() {
    const container = document.getElementById('gallery-list');
    if (!container) return;

    try {
        const response = await api.get('/galleries');
        const photos = response.data.data || (Array.isArray(response.data) ? response.data : []);

        container.innerHTML = '';
        if (photos.length === 0) {
            container.innerHTML = '<p class="text-center text-slate-500">Belum ada foto.</p>';
            return;
        }

        photos.forEach(photo => {
            // Priority: file_url contains either video or photo URL, fallback to specific fields
            let urlFoto = photo.file_url || photo.file_video || photo.file_foto;
            if (Array.isArray(urlFoto)) urlFoto = urlFoto[0];
            const fallback = 'https://via.placeholder.com/400x400?text=No+Image';

            const isVideo = urlFoto && typeof urlFoto === 'string' && urlFoto.match(/\.(mp4|webm|ogg|mov)$/i);
            const mediaTag = isVideo
                ? `<video src="${urlFoto}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" controls muted autoplay loop playsinline></video>`
                : `<img src="${urlFoto || fallback}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" onerror="this.src='${fallback}'">`;

            container.innerHTML += `
                <div class="relative group aspect-square overflow-hidden bg-slate-100 rounded-2xl shadow-sm">
                    ${mediaTag}
                </div>`;
        });
    } catch (error) {
        console.error("Gagal memuat gallery:", error);
    }
}

// --- FUNGSI WHATSAPP PENAWARAN ---
function setupWhatsAppForm() {
    const offerForm = document.getElementById('offerForm');
    if (!offerForm) return;

    offerForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const company = document.getElementById('company_name').value;
        const name = document.getElementById('full_name').value;
        const type = document.getElementById('karoseri_type').value;
        const amount = document.getElementById('unit_amount').value;
        const detailInput = document.getElementById('detail_needs');
        const detail = detailInput ? detailInput.value : '-';
        const phone = "6281228641062";

        const message = `Halo Karoseri Maju Jaya,\n\n` +
            `Saya ingin mengajukan permintaan penawaran harga:\n\n` +
            `*Nama Perusahaan:* ${company}\n` +
            `*Nama Lengkap:* ${name}\n` +
            `*Jenis Karoseri:* ${type}\n` +
            `*Jumlah Unit:* ${amount} Unit\n` +
            `*Detail:* ${detail}\n\n` +
            `Mohon informasi lebih lanjut. Terima kasih.`;

        const encodedMessage = encodeURIComponent(message);
        window.open(`https://wa.me/${phone}?text=${encodedMessage}`, '_blank');
    });
}

// --- INISIALISASI ---
document.addEventListener('DOMContentLoaded', () => {
    fetchProducts();
    fetchGallery();
    setupWhatsAppForm();
});