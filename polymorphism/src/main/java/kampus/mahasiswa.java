/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package kampus;

public class mahasiswa extends orang {
    int nim;
    
    public mahasiswa(String nama, int umur, int nim){
        super(nama, umur);
        this.nim = nim;
    }

    @Override
    public void data() {
        System.out.println("Nim mahasiswa  : " + nim);
        System.out.println("Nama mahasiswa : " + nama);
        System.out.println("Umur mahasiswa : " + umur);
    }
    
    @Override
    public void perwalian(){
        System.out.println("'\n" + nama +  " telah melakukan perwalian");
    }
    
    @Override
    public void ujian() {
        System.out.println(nama + " sedang melakukan ujian");
    }
    
    public void krs(){
        System.out.println(nama +" telah mengambil 24 sks");
    }
    
}
