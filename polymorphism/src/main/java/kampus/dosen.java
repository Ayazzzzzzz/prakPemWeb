/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package kampus;

public class dosen extends orang implements pengajaran {
    String mengajar;
    
    public dosen(String nama, int umur, String mengajar){
        super(nama, umur);
        this.mengajar = mengajar;
    }

    @Override
    public void data() {
        System.out.println("Nama dosen  : " + nama);
        System.out.println("Mata kuliah : " + mengajar);  
        System.out.println("Umur dosen  : " + umur);
    }
    
    @Override
    public void perwalian() {
        System.out.println("\n" + nama + " telah menyelesaikan perwalian");
    }

    @Override
    public void ujian() {
        System.out.println("" + nama + " sedang mengawasi ujian");
    }

    @Override
    public void pembelajaran() {
         System.out.println("" + nama + " sedang mengajar matkul " + mengajar);
    }
    
    @Override
    public void penggajian() {
         System.out.println(nama + " mendapatkan gaji Rp. " + gaji);
    }

    @Override
    public void penelitian() {
        System.out.println("\n" + nama + " sedang melakukan penelitian ");
    }
}
