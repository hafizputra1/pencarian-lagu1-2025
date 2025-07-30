###  **Judul Tugas**:

**Sistem Pencarian Lagu Berdasarkan Judul, Genre, dan Artis (Struktur Data)**

---

###  **Deskripsi Umum**:

Aplikasi ini memungkinkan pengguna untuk mencari lagu berdasarkan *judul lagu*, *genre*, atau *nama artis*. Sistem ini menampilkan hasil pencarian yang sesuai dan efisien menggunakan struktur data seperti **array**, **hashing**, dan **searching algorithm**.

---

###  **Struktur Data yang Digunakan**:

1. **Array of Struct / Object**

   * Menyimpan kumpulan data lagu (judul, genre, artis).
   * Contoh:

     ```cpp
     struct Lagu {
         string judul;
         string genre;
         string artis;
     };
     Lagu daftarLagu[100];
     ```

2. **Hash Table (untuk optimasi pencarian artis atau genre)**

   * Digunakan agar pencarian lebih cepat berdasarkan `genre` atau `artis`.
   * Menghindari pencarian linear saat data sudah banyak.

3. **String Matching / Searching Algorithm**

   * Digunakan untuk mencari lagu berdasarkan kata kunci pada judul/artis/genre.
   * Algoritma yang bisa dipakai: **Linear Search**, **Binary Search (kalau data diurutkan)**, atau **KMP (Knuth-Morris-Pratt)** untuk string pattern matching.

---

###  **Fitur Utama Pencarian**:

1. **Pencarian berdasarkan Judul**

   * Menggunakan *string matching* (cocok sebagian atau keseluruhan).

2. **Pencarian berdasarkan Genre**

   * Gunakan `hashing` atau iterasi untuk filter berdasarkan genre tertentu.

3. **Pencarian berdasarkan Artis**

   * Menampilkan semua lagu dari artis tertentu dengan pencocokan nama.

---

###  **Contoh Data Lagu** (Dummy Data):

```plaintext
| Judul Lagu      | Genre      | Artis              |
|------------------|------------|---------------------|
| Melodi Hujan     | Pop        | Rani Anggara        |
| Jalan Sepi       | Rock       | Didi Mahardika      |
| Senja di Mata    | Jazz       | Cahya Paramitha     |
| Lagu Rindu       | Pop        | Rani Anggara        |
| Dendang Hati     | Dangdut    | Bang Ucok           |
```

---

###  **Analisis Kompleksitas**:

* **Linear Search**: O(n) – Sederhana, cocok untuk jumlah data kecil sampai menengah.
* **Hash Table Access**: O(1) average case – sangat efisien bila implementasi benar.
* **Binary Search**: O(log n) – hanya jika data sudah diurutkan.
* **KMP / Regex Matching**: O(n + m) – cocok untuk pencarian dalam string panjang.

---

###  **Kelebihan Sistem**:

* Simpel dan efisien untuk data menengah.
* Fleksibel untuk dikembangkan ke sistem rekomendasi.
* Bisa diperluas ke pencarian multi-kriteria (judul dan artis sekaligus).

###  **Kekurangan**:

* Jika tidak menggunakan struktur indexing seperti hash atau tree, pencarian bisa lambat.
* Belum mendukung typo atau *fuzzy search* (bisa ditambahkan kemudian).

---

###  **Contoh Kode Implementasi Awal (C++)**:

```cpp
#include <iostream>
#include <vector>
#include <string>
using namespace std;

struct Lagu {
    string judul;
    string genre;
    string artis;
};

vector<Lagu> daftarLagu = {
    {"Melodi Hujan", "Pop", "Rani Anggara"},
    {"Jalan Sepi", "Rock", "Didi Mahardika"},
    {"Senja di Mata", "Jazz", "Cahya Paramitha"},
    {"Lagu Rindu", "Pop", "Rani Anggara"},
    {"Dendang Hati", "Dangdut", "Bang Ucok"}
};

void cariBerdasarkanJudul(string keyword) {
    cout << "\nHasil pencarian judul: " << keyword << "\n";
    for (Lagu l : daftarLagu) {
        if (l.judul.find(keyword) != string::npos) {
            cout << l.judul << " - " << l.genre << " - " << l.artis << endl;
        }
    }
}

int main() {
    string kataKunci;
    cout << "Masukkan kata kunci judul lagu: ";
    getline(cin, kataKunci);
    cariBerdasarkanJudul(kataKunci);
    return 0;
}
```

