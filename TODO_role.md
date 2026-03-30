# Role-Based Access (Guru/Siswa)

## Steps:

- [x] 1. Fix login.PHP: Use actual user level from DB
- [x] 2. Create placeholder pages: profil.php, kelas.php, jadwal.php
- [x] 3. Update index.php dynamic menus by $\_SESSION['level']
- [x] 4. Test role logins

## Notes:

Admin: MASTER (Guru/Siswa/Mapel/Kelas) + TRANSAKSI (Jadwal)
Guru: Profil / Kelas / Jadwal  
Siswa: Profil / Jadwal
All link to new pages + Logout. Ready! Add users w/ level='guru'/'siswa' in DB to test.
