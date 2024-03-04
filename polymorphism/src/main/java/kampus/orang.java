/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package kampus;

public abstract class orang {
    String nama; //nama, umur -> data
    int umur;
    
    public orang(String nama, int umur){
        this.nama = nama; //this buat objek yang ada di class itu
        this.umur = umur; 
    }
    
    abstract void data(); //nampilin biodata

    abstract void perwalian(); //melakukan 
    
    abstract void ujian(); //nanti dosen jadi pengawas, mahasiswa jadi peserta
    
}