<template>
    <div class="bg-gray-100 pt-1 pb-5">

        <div class="container">
            <h1>
                {{ $t("docs.title") }}

            </h1>
            <div class="row">

                <div class="col-lg-12">
                    <a href="https://lex.uz/docs/5450176" target="_blank" class="card">
                        <div class="row align-items-center">
                            <div class="col-10 col-lg-11">{{ $t("docs.content[0].title") }}
                            </div>

                            <div class="col-2 col-lg-1">
                                <div><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            </div>

                        </div>

                        <p>
                            {{ $t("docs.content[0].content") }}

                        </p>
                    </a>
                    <a class="card" href="https://lex.uz/docs/5739727" target="_blank">
                        <div class="row align-items-center">
                            <div class="col-10 col-lg-11">{{ $t("docs.content[1].title") }}
                            </div>

                            <div class="col-2 col-lg-1">
                                <div><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            </div>

                        </div>

                        <p>
                            {{ $t("docs.content[1].content") }}

                        </p>
                    </a>
                    <a href="https://lex.uz/docs/5739815" target="_blank" class="card">
                        <div class="row align-items-center">
                            <div class="col-10 col-lg-11">{{ $t("docs.content[2].title") }}
                            </div>

                            <div class="col-2 col-lg-1">
                                <div href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            </div>

                        </div>

                        <p>
                            {{ $t("docs.content[2].content") }}

                        </p>

                        <span class="d-lg-flex" style="gap: 24px">

                          <a href="/docs/Деҳқон_хўжаликларига_ер_участкасини_ижарага_бериш_НАМУНАВИЙ_ШАРТНОМАСИ.docx"
                             target="_blank" class="file">

                        <img src="/image/Document.svg" alt="">
                        <div class="mx-5">

                            <h3>{{ $t('docs.content[2].file[0]') }}</h3>
                            <p>187KB   -   DOC file</p>
                        </div>
                    </a>
                        <a href="/docs/Юридик_шахсларга_ер_участкасини_узоқ_муддатли_ижарага_бериш_НАМУНАВИЙ.docx"
                           target="_blank" class="file">

                        <img src="/image/Document.svg" alt="">
                        <div class="mx-5">

                            <h3>{{ $t('docs.content[2].file[1]') }}</h3>
                            <p>187KB   -   DOC file</p>
                        </div>
                    </a>
                    </span>

                    </a>
                    <a href="https://lex.uz/docs/5525718" target="_blank" class="card">
                        <div class="row align-items-center">
                            <div class="col-10 col-lg-11">{{ $t("docs.content[3].title") }}
                            </div>

                            <div class="col-2 col-lg-1">
                                <div href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            </div>

                        </div>

                        <p>
                            {{ $t("docs.content[3].content") }}
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Docs"
}
</script>

<style scoped>

</style>
