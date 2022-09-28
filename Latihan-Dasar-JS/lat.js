/**
 * Buatlah logika if untuk mengevaluasi nilai score dengan ketentuan:
 *  1. Jika score bernilai 90 atau lebih
 *      - Isi variabel result dengan nilai: 'Selamat! Anda mendapatkan nilai A.'
 *  2. Jika score bernilai 80 hingga 89
 *      - Isi variabel result dengan nilai: 'Anda mendapatkan nilai B.'
 *  3. Jika score bernilai 70 hingga 79
 *      - Isi variabel result dengan nilai: 'Anda mendapatkan nilai C.'
 *  4. Jika score bernilai 60 hingga 69:
 *      - Isi variabel result dengan nilai: 'Anda mendapatkan nilai D.'
 *  5. Jika score bernilai di bawah 60:
 *      - Isi variabel result dengan nilai: 'Anda mendapatkan nilai E.'
 *
 *
 *  Note: - Mohon untuk tidak menghapus kode yang sudah ada sebelumnya.
 *        - Anda tidak perlu membuat variabel result dan score secara manual.
 *          Gunakan variabel yang sudah disediakan.
 *
 */
// TODO
// if (score >= 90){
//   result ="Selamat! Anda mendapatkan nilai A.";
// }else if (score >= 80 && score <= 89){
//   result="Anda mendapatkan nilai B.";
// }else if (score >= 70 && score <= 79){
//   result="Anda mendapatkan nilai C.";
// }else if (score >= 60 && score <= 69){
//   result="Anda mendapatkan nilai D.";
// }else if (score < 60){
//   result="Anda mendapatkan nilai E.";}
//   // Jangan hapus kode ini
//   return result;
// }
/**
 * Jangan hapus kode di bawah ini
 */
// module.exports = scoreChecker;
if ((true || false) && (false || false)) {
  console.log("It's true");
} else {
  console.log("It's false");
}

const adiebMap = new Map([
  ["Jakarta", "Indonesia"],
  ["London", "England"],
  ["Tokyo", "Japan"],
]);

console.log(adiebMap.get("Jakarta"));
/**
 * TODO
 * 1. Buatlah variabel dengan nama restaurant yang bertipe object dengan ketentuan berikut:
 *    - Memiliki properti bernama "name"
 *       - Bertipe data string
 *       - Bernilai apa pun, asalkan tidak string kosong atau null.
 *    - Memiliki properti bernama "city"
 *       - Bertipe data string
 *       - Bernilai apa pun, asalkan tidak string kosong atau null.
 *    - Memiliki properti "favorite drink"
 *       - Bertipe data string
 *       - Bernilai apa pun, asalkan tidak string kosong atau null.
 *    - Memiliki properti "favorite food"
 *       - Bertipe data string
 *       - Bernilai apa pun, asalkan tidak string kosong atau null.
 *    - Memiliki properti "isVegan"
 *       - Bertipe data boolean
 *       - Bernilai boolean apa pun.
 *
 * 2. Buatlah variabel bernama name.
 *    Kemudian isi dengan nilai name dari properti object restaurant
 * 3. Buatlah variabel bernama favoriteDrink.
 *    Kemudian isi dengan nilai "favorite drink" dari properti object restaurant
 */

// TODO
const restaurant = {
  name: "Madang",
  city: "Pakis",
  "favorite drink": "Ronde",
  "favorite food": "Gorengan",
  isVegan: false,
};
const name = restaurant.name;

const favoriteDrink = restaurant.favoriteDrink;

console.log(restaurant);
console.log(name);
console.log(favoriteDrink);

/**
 * Jangan hapus kode di bawah ini
 */
module.exports = { restaurant, name, favoriteDrink };

/**
 * TODO:
 * Buatlah sebuah variabel dengan nama evenNumber yang merupakan sebuah array dengan ketentuan:
 *   - Array tersebut menampung bilangan genap dari 1 hingga 100
 *
 * Catatan:
 *   - Agar lebih mudah, gunakanlah for loop dan logika if untuk mengisi bilangan genap pada array.
 */

// TODO
let evenNumber = [];

for (a = 2; a <= 100; a += 2) {
  evenNumber.push(a);
}

console.log(evenNumber);
/**
 * Jangan hapus kode di bawah ini
 */
module.exports = evenNumber;
