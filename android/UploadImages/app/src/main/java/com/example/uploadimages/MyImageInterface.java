package com.example.uploadimages;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface MyImageInterface {

    String IMAGEURL = "https://learnprogramming.ericmuchenah.com/";
    @FormUrlEncoded
    @POST("uploadimage.php")
    Call<String> getImageData(
            @Field("name") String name,
            @Field("image") String image
    );

}