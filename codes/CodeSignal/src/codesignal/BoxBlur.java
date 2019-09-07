package codesignal;

public class BoxBlur {

    public static int[][] Challenge(int[][] image) {
        int heigth = image.length;
        int width = image[0].length;
        int heigthBlurredImage = (heigth - 3) + 1;
        int widthBlurredImage = (width - 3) + 1;
        int[][] blurredImage = new int[heigthBlurredImage][widthBlurredImage];
        int xPoint = 0;
        int yPoint = 0;
        boolean needToBlur = true;
        while (needToBlur) {
            int sum = 0;
            for (int i = xPoint; i < xPoint + 3; i++) {
                for (int j = yPoint; j < yPoint + 3; j++) {
                    sum += image[i][j];
                }
            }
            int average = (int) Math.floor(sum / 9);
            blurredImage[xPoint][yPoint] = average;
            if (yPoint + 3 < width) {
                yPoint++;
            } else {
                if (xPoint + 3 < heigth) {
                    yPoint = 0;
                    xPoint++;
                } else {
                    needToBlur = false;

                }
            }
        }
        return blurredImage;
    }

}


