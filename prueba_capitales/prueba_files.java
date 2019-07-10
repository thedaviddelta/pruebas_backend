import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.List;

/**
 * prueba_files
 */
public class prueba_files {
    private static List<String> caps;

    public static void main(String[] args) {
        try {
            System.out.println("p1 - io:\n");
            p1io();
            System.out.println("\n\np2 - nio:\n");
            p2nio();
            System.out.println("\n\np3 - io:\n");
            p3io();
            System.out.println("p4 - nio:\n");
            p4nio();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private static void p1io() throws Exception {
        File file = new File("capitales.txt");
        FileReader fr = new FileReader(file);
        char[] data = new char[(int)file.length()];
        fr.read(data);

        String[] caps = String.valueOf(data).split("\r\n");
        int i = 0;
        for (String cap : caps) {
            System.out.printf("%d => %s%n", i++, cap);
        }
        fr.close();

        //prueba_files.caps = caps;
    }

    private static void p2nio() throws Exception {
        Path file = Paths.get("capitales.txt");
        List<String> caps = Files.readAllLines(file);
        int i = 0;
        for (String cap : caps) {
            System.out.printf("%d => %s%n", i++, cap);
        }
        prueba_files.caps = caps;
    }

    private static void p3io() throws Exception {
        File file = new File("newCapitales.txt");
        //if (!file.exists()) {
        //    file.createNewFile();
        //}
        FileWriter fw = new FileWriter(file);
        for (String cap : caps) {
            fw.write(String.format("%s%n", cap));
        }
        fw.close();
    }

    private static void p4nio() throws Exception {
        Path file = Paths.get("newCapitales.txt");
        Files.write(file, caps);
    }
}